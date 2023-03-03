## EGZAMINY.PL
Platforma egzaminacyjna.

## About The Project

### Description 👇

We provide an online testing platform open source that can be use for making tests and exams. During development, we paid attention to the security of the application and implemented safe programming solutions.

### Features 🔎

- A secure platform for online testing.
- Secure login panel for administrator and additional features for administrators.
- the ability to add and modify exams by administrator user.
- The ability to view scores of done exams.
- All exam scores are automatically sended to database and saved on backend site.
- User who are not logged don't have any access than main page and exam page.

### Built With 💻

- [MySQL](https://www.mysql.com/)
- [PHP 8.0](https://www.php.net/)
- [CSS](https://www.w3.org/)
- [HTML5](https://html.com/)

## Getting Started ✅

You can run application manualy by copying repository and upload all .php files from /src/ folder to your web server. Or use docker and docker-compose file that automatically run all services by one command in unix terminal.

### Prerequisites:

- docker version >= 20.10.12
- docker-compose version >= 1.25.0

### Installation

1. Clone the repository form GitHub

```sh
  git clone https://github.com/YxZi5/EGZAMINY.PL.git
  cd EGZAMINY.PL
```
2. Modify or no some parameters like "ports" in docker-compose file and run it

```sh
  sudo docker-compose up -d
```

3. To verifyy that all components of application are running:

```sh
  sudo docker-compose ps
```
