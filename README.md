# Fiesta App

Fiesta is a simple social media platform where users can post, like comments etc.
just like any other social media application.

## Getting Started

```sh
$ docker-compose up -d
```

### Prerequisites

- Docker CE  
- Docker Compose 

### Running

Navigate to `http://localhost` to get access to the web app. 

## Features: 

- Users can register accounts. 
- Users can login to accounts. 
- Users can follow each other. 
- Users can create comments. 
- Users can like each other comments. 
- Users can view their own timeline
- Users can view each other's timeline. 

## Built With

* [Laravel](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [MariaDB](https://maven.apache.org/) - Database 
* [VueJS](https://rometools.github.io/rome/) - Used to create the frontend


### _Not using Laradock_ 

I hope this is not used against me, but I have decided not to use Laradock and to roll out my own Docker config(s) to suit the stack I want to build. Laradock is great, especially for beginners, however I find that it's too bloated and heavy, especially when working on an older Macbook Air with limited storage and resources. 

By rolling out my own setup, I am able to key my configs lean and only use the best parts that I require. On the bright side, it goes that show that I am comfortable enough using Docker to roll out my own config. 

## API Documentation

Used Swagger UI for API Documentation.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
