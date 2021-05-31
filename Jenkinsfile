pipeline {
    agent {
        docker {
            image 'php:8.0'
            args '-u root:root'
        }
    }
    environment {
        DISCORD_WEBHOOK = credentials('ngc-home.discord-webhook')
    }
    stages {
        stage("build") {
            steps {
                sh '''
                    apt-get update -q
                    apt-get install -y \
                        git \
                        curl \
                        libpng-dev \
                        libonig-dev \
                        libxml2-dev \
                        zip \
                        unzip \
                        gnupg

                    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                    php composer-setup.php

                    php composer.phar install --prefer-dist --no-ansi --no-interaction --no-progress --no-scripts

                    curl -sL https://deb.nodesource.com/setup_15.x | bash - \
                    	&& apt-get install -y nodejs \
                    	&& curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
                    	&& echo "deb https://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
                    	&& apt-get update \
                    	&& apt-get install -y yarn

                    yarn install
                    yarn run prod
                '''
            }
        }
        stage("deploy") {
            when {
                branch 'master'
            }
            environment {

                REMOTE_HOST = credentials('ngc-home.remote-host')
                REMOTE_USER = credentials('ngc-home.remote-user')
                SSH_PRIVATE_KEY = credentials('global.ssh-private-key')
                WORKDIR = '/srv/app'

                APP_KEY = credentials('ngc-home.app-key')
                APP_HOST = credentials('ngc-home.app-host')
            }
            steps {
                sh '''
                    cp .env.example .env
                    sed -ri "s/^APP_KEY=.*/APP_KEY=${APP_KEY}/g" .env
                    sed -ri "s/^APP_HOST=.*/APP_HOST=${APP_HOST}/g" .env
                    sed -ri "s/^APP_ENV=.*/APP_ENV=production/g" .env

                    apt-get update -y && apt-get install -y openssh-client rsync
                    eval $(ssh-agent -s)
                    ssh-add $SSH_PRIVATE_KEY
                    mkdir -p ~/.ssh
                    chmod 700 ~/.ssh
                    echo "Host *\n\tStrictHostKeyChecking no\n\n" > ~/.ssh/config

                    rsync -az --delete --delete-excluded --chmod=D755,F644 \
                        --exclude "node_modules" \
                        --exclude ".git*" \
                        --exclude "reports" \
                        "$PWD"/ $REMOTE_USER@$REMOTE_HOST:$WORKDIR/
                '''
            }
        }
    }
    post {
        always {
            notifyDiscord(env.DISCORD_WEBHOOK)
            def changeSet = getChangeSet()

            discordSend description: , link: env.BUILD_URL, result: currentBuild.currentResult, title: "${env.JOB_NAME} ${env.BUILD_DISPLAY_NAME}", webhookURL: env.DISCORD_WEBHOOK
        }
    }
}

def notifyDiscord(String webhook) {
    def changeSet = getChangeSet()
    def description = "**Build:** ${env.BUILD_NUMBER}\n**Status:** ${currentBuild.currentResult}\n\n**Changes:**\n${changeSet}"
    def title = "${env.JOB_NAME} ${env.BUILD_DISPLAY_NAME}"

    discordSend title: title, description: description, link: env.BUILD_URL, result: currentBuild.currentResult, webhookURL: webhook
}

@NonCPS

def getChangeSet() {
  return currentBuild.changeSets.collect { cs ->
    cs.collect { entry ->
        "+ `${entry.getCommitId()}` _${entry.msg} - ${entry.author.fullName}_\n"
    }.join("\n")
  }.join("\n")
}
