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


