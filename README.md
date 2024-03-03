# Setting Up My WordPress Application

## Introduction
Welcome to my WordPress application setup guide! This README provides step-by-step instructions for setting up agit stand running the application on your local machine.

## Prerequisites
Before you begin, make sure you have the following prerequisites installed on your machine:
- Docker Engine
- Basic understanding of Docker Compose
- Access to the Git repository

## Installation

1. Clone the Git repository:
   ```bash
   git clone https://github.com/BillyA287/three-ships.git
   cd test-three-ships

2. Create a .env file in the project root directory with the following:
    WORDPRESS_DB_HOST=db
    WORDPRESS_DB_USER=test
    WORDPRESS_DB_PASSWORD=test
    WORDPRESS_DB_NAME=test

3.  In the terminal run docker-compose up. 

4.  http://localhost:8000

5. Stopping the Application in the terminal run docker-compose down.









