## Project Overview
This project is a containerised portfolio website for TrustMark Builders, a civil engineering construction company. The system allows visitors to view company services and contact the company through an online form.

The application is developed using PHP, Apache, and MySQL and containerised using Docker and Docker Compose to ensure consistent deployment across environments.

This repository contains the complete Docker configuration required to build and run the application in a containerised environment.

## Group Information

| Role | Name | Student ID |
| :--- | :--- | :--- |
| **DevOps Engineer** | **B.C.N.D.D.Karunarathna** | `ITBIN-2313-0048` |
| **Full Stack Developer** | **K.H.M.S.Nikeshala** | `ITBIN-2313-0070` |


## Live deployment URL

https://trustmark-builders-devops-assignment-1.onrender.com/

## Dockerised Architecture
The application is containerised using,
* PHP-Apache container (Application layer)
* MySQL container (Database layer)
* Docker Compose for service orchestration
* Named volumes for persistent database storage
* Environment variables for configuration management

## Repository Structure
```.
├── Dockerfile
├── docker-compose.yml
├── .dockerignore
├── README.md
├── src/
└── database/
```
* ``` Dockerfile ``` Defines application image build process
* ``` docker-compose.yml ``` Orchestrates services
* ``` .dockerignore ``` Optimises build context
* ``` src/ ``` Application source code
* ``` database/ ``` Database initialisation scripts

## Prerequisite
Before running the project, ensure the following are installed
* Docker (latest stable version)
* Docker Compose (if not bundled with Docker Desktop)
* Git

Verify installation
```
docker --version
docker compose version
```
## Environment Configuration
The application uses environment variables for configuration.

The following variables are required (defined in ``` docker-compose.yml ```)

| Variable | Description | 
| :--- | :--- | 
| ``` MYSQL_ROOT_PASSWORD ```| MySQL root password |
| ``` MYSQL_DATABASE ```| Database name | 
 
## How to Run the Project Locally
### Clone the Repository
```
git clone https://github.com/dilumgit/TrustMark-Builders-devops-assignment.git
cd TrustMark-Builders-devops-assignment
```

### Build and Start Containers
```
docker compose up --build
```

### Access the Application
```
http://localhost:8080
```

## Database Persistence
* A named Docker volume is used to store MySQL data.
* This ensures that database data remains available even when containers are restarted.
* To reset the database completely,
``` docker compose down -v ```

## Security Considerations
* Sensitive configuration values are managed via environment variables.
* No credentials are hardcoded in the Dockerfile.
* Unnecessary files are excluded using ```.dockerignore```.
* Services communicate using Docker’s internal networking.
* Official Docker base images are used to reduce security risks

## Build status badges

![CI Pipeline](https://github.com/dilumgit/TrustMark-Builders-devops-assignment/actions/workflows/ci.yml/badge.svg?branch=main)
![Deploy](https://github.com/dilumgit/TrustMark-Builders-devops-assignment/actions/workflows/deploy.yml/badge.svg?branch=main)

## Individual contributions

### DevOps (ITBIN-2313-0048)

Deployed the application to the Render cloud platform
Configured Docker containers and environment variables
Managed database connectivity for deployment
Debugged deployment issues including HTTP 500 errors and container configuration problems

### Full Stack (ITBIN-2313-0070)

Designed and implemented the website user interface
Developed backend functionality using PHP
Implemented the contact form and data submission process
Designed and implemented the MySQL database schema
Debugged SQL queries and backend logic


## Troubleshooting
### Issue: Port Already in Use
* Stop other services using port 8080
* Or change the port mapping inside
```docker-compose.yml```

### Issue: Database Connection Error
* Ensure MySQL container is running
* Verify environment variables
* Check container logs
``` docker logs mysql_db ```