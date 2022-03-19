## Requirement

- PHP8 or higher
- composer
- mysql

## Install

- Download repo from [github](https://github.com/kodkatibi/comment)
- type `cd comment` on terminal
- after `composer install`
- Don't forget to copy from .env.example file to .env
- After write credentials, for migrate to DB type ``php artisan migrate --seed``
- now you can run ``php artisan serve``

# API

- All data return like ->
  ``
  'data' => $data, 'status' => $status, 'errors' => []
  ``
- Error message is returned on errors array

## Endpoints

### Get all posts

```http
  GET /api/post
```

###### return array with post data

### Get comments

```http
  GET /api/comment
```

###### return array with comment data

### Post comments

```http
  Post /api/comment/save
```

| Parameter    | Type     | Explain                             |
|:-------------|:---------|:------------------------------------|
| `post`       | `int`    | **Required**. Post id               |
| `writerName` | `string` | **Required**. Comment writer's name |
| `comment`    | `string` | **Required**. Comment               |
| `parent`     | `int`    | Comment id                          |
