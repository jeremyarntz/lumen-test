# API Reference

#### Headers:
```
  Content-Type: application/json
```

## Labels:

### Get:
GET /api/v1/labels/{id}

#### Create:
POST /api/v1/labels/

Body:
```
{
   "name" : "Label Name"
}
```

#### Update:
PUT /api/v1/labels/{id}
```
Body:
{
    "name": "Updated Label Name"
}
```


## Artists:

#### Create:
POST /api/v1/artists/

Body:
```
{
   "name" : "Artist Name"
}
```

#### Get:
GET /api/v1/artists/{id}

#### Update:
PUT /api/v1/artists/{id}

Body:
```{
    "name": "Updated Artist Name"
}
```


## Releases:

#### Get:
Get /api/v1/releases/{id}

### Create:
POST /api/v1/releases/

Body:
```{
   "name" : "Artist Name",
   "artist" : 1,
   "label" : 1
}
```

#### Update:
PUT /api/v1/releases/{id}

Body:
```{
    "name": "New Release Name"
}
```

## Collection:

#### Add:
POST /api/v1/user/collection

Body:
```{
    "user" : "1",
    "release" : "2"
}
```
