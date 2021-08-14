<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Financepeer Project

This project was developed in **laravel** where user can log in to the application also can log out. The authenticated users can upload the data records to the database via a **JSON** file and also can view the records present in database


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Features

- Log in, Log out and Register functionality.
- Uses Laravel **Sanctum authentication**.
- MySQL Database to store the user details and records.
- Upload data to a database via a **JSON** file.
- Uses Laravel validation to serve form requests.
- Uses jetstream and livestream features.

## API Reference


```http
  GET /
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| Nan | Nan | Displays Statring/root page |



```http
  GET /login
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan | Displays Log in Page. If already authenticated then redirects to main page |




```http
  GET /register
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan | Displays register Page. If already authenticated then redirects to main page |



```http
  GET /logout
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan |Deletes the current session and redirects to starting/root page|

```http
  GET /uploadRecord
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan |Displays upload record page. **Requires authentication**|


```http
  GET /uploadRecord
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan |Displays upload record page. **Requires authentication**|


```http
  POST /uploadRecord
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan |Insert the records present in the JSON file to database. **Requires authentication**|


```http
  POST /uploadRecord
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan |Insert the records present in the JSON file to database. **Requires authentication**|


```http
  GET /viewRecord
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| Nan      | Nan |Displays the records present in a database in a table format. **Requires authentication**|


## Screenshots
- Screenshot of starting/root page. [view](https://drive.google.com/file/d/11VlXIknXBRzwbCjMQqzAVBVnPt2v9Zgd/view?usp=sharing)
- Screenshot of log in page. [view](https://drive.google.com/file/d/1lpBwZusqJEJWjibV5LsXrvbLXFORFkH7/view?usp=sharing)
- Screenshot of register page. [view](https://drive.google.com/file/d/1ObtMdPEG97MYz_SsHBgN4kThmzdWvsv1/view?usp=sharing)
- Screenshot of main/home page. [view](https://drive.google.com/file/d/1JBPvskTCt9S-Fpt0bnqB9B9XroF8qVVD/view?usp=sharing)
- Screenshot of upload Records page. [view](https://drive.google.com/file/d/1XAjvwEaBCi54WTxjQBAcUshmOTXAAKfS/view?usp=sharing)
- Screenshot of validation check failed. [view](https://drive.google.com/file/d/1gSC8_HmewjcFFUVLqe0IkYOhR6E8GEg2/view?usp=sharing)
- Screenshot of validation check success and records inserted. [view](https://drive.google.com/file/d/1wkrRY2A8qVd5C20AesLYb7HIk9yyLoX9/view?usp=sharing)
- Screenshot of database after records inserted from JSON file. [view](https://drive.google.com/file/d/1WBPF8v2V4EdmWeF9vrbuu8KWVdS1JARv/view?usp=sharing)
- Screenshot of records fetched from database into a table. [view](https://drive.google.com/file/d/1zUXxxjeO2k70yLFeypCaH0jqAv5SDLfJ/view?usp=sharing)



## Installation

#### Installing chocolatey
(Recommended to install other applications easily)  

```
https://community.chocolatey.org
```

#### Installing vscode
Enter the command in your power shell and it'll get installed
```
choco install vscode
```
#### Installing xampp

```
choco install xampp  
```


#### Installing Composer

```
choco install composer
```   
Composer Package Manager for installing packages.
 


## Getting Started
Install a laravel project with composer
- Open command prompt move to the folder where you want to install the laravel project and run -
```bash
  composer create-project laravel/laravel <project-name>
```
- Move to the Laravel project using -
```bash
  cd <project-name>
```
- Start the MySQL server from Xampp control panel.

- Before starting the Laravel development server migrate the migrations using the following command
```bash
   php artisan migrate
```
- To start Laravel's local development server using the Artisan CLI's serve, run this command -
```bash
   php artisan serve
```

- Make sure to run this command before uploading and saving any files into the server
```bash
   php artisan storage:link
```

