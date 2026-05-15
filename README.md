# CarRent - Automüügi veebirakendus

Dockeril põhinev PHP ja MySQL veebirakendus automüügi haldamiseks.

## Funktsionaalsus

- Autode nimekirja kuvamine
- Auto lisamine
- Auto muutmine
- Auto kustutamine
- Administraatori sisselogimine
- Kaitstud admin vaade
- Väljalogimine

## Kasutatud tehnoloogiad

- PHP
- MySQL
- Apache
- Docker
- Docker Compose
- Bootstrap 5

## Käivitamine

### 1. Klooni projekt

```bash
git clone https://github.com/SigridLillep/CarRent.git
```

### 2. Liigu projekti kausta

```bash
cd CarRent
```

### 3. Käivita Docker

```bash
docker compose up --build
```

## Ligipääs

### Veebirakendus

```text
http://localhost:8080
```

### Admin vaade

```text
http://localhost:8080/admin.php
```

**Sisselogimine:**

```text
Kasutajanimi: admin
Parool: admin
```

### phpMyAdmin

```text
http://localhost:8081
```

**Andmebaasi kasutaja:**

```text
user
password
```

## Docker teenused

Projekt sisaldab:

- Apache veebiserver + PHP
- MySQL andmebaas
- phpMyAdmin
- Linux container environment