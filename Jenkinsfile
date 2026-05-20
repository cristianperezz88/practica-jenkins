pipeline {
    agent any
    environment {
        // Extraemos el secreto y lo metemos en una variable temporal
        ROOT_PASSWORD = credentials('clave-mariadb') 
    }
    stages {
        stage('Limpieza') {
            steps {
                sh 'docker compose down --remove-orphans'
            }
        }
        stage('Despliegue seguro') {
            steps {
                sh 'docker compose up --build -d'
            }
        }
    }
}
