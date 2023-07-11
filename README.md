
## API Endpoints

### Get All Object Items

- **URL:** `/ObjectItem`
- **Method:** GET
- **Description:** Retrieve a list of all object items.
- **Responce:** .
```console
[
   {
    "message": "created successfully",
    "data": {
        "condition": "1",
        "category_id": "1",
        "item_id": 32,
        "updated_at": "2023-06-29T17:44:54.000000Z",
        "created_at": "2023-06-29T17:44:54.000000Z",
        "id": 29,
        "item": {
            "id": 32,
            "name": "sa",
            "user_id": 1,
            "description": "descriptiondescriptio",
            "address": "addressaddress",
            "availabilities": 1,
            "booked": 1,
            "score_cost": 12,
            "updated_at": "2023-06-29T17:44:54.000000Z",
            "created_at": "2023-06-29T17:44:54.000000Z",
            "item_images": [
                {
                    "id": 10,
                    "item_id": 32,
                    "image_path": "images/not6AvMfcHEAzaSZ8j2SWkiqJEarSiHpZrordikz.png",
                    "created_at": "2023-06-29T17:44:54.000000Z",
                    "updated_at": "2023-06-29T17:44:54.000000Z"
                },
                {
                    "id": 11,
                    "item_id": 32,
                    "image_path": "images/Ue76kf1KEpGieMWRS4u7VHtKNNF1quizQHsPOcAt.jpg",
                    "created_at": "2023-06-29T17:44:55.000000Z",
                    "updated_at": "2023-06-29T17:44:55.000000Z"
                }
            ]
        },
        "category": {
            "id": 1,
            "name": "cat1",
            "parent_id": null,
            "updated_at": null,
            "created_at": "2023-06-28T07:25:18.000000Z"
        }
    }
}
]
```

### Get Object Item by ID

- **URL:** `/ObjectItem/{id}`
- **Method:** GET
- **Description:** Retrieve a specific object item by ID.
-  **Responce:** .
```console
   {
    "item_id": 32,
    "id": 29,
    "condition": "new",
    "category_id": 1,
    "updated_at": "2023-06-29T17:44:54.000000Z",
    "created_at": "2023-06-29T17:44:54.000000Z",
    "item": {
        "id": 32,
        "name": "sa",
        "user_id": 1,
        "description": "descriptiondescriptio",
        "address": "addressaddress",
        "availabilities": 1,
        "booked": 1,
        "score_cost": 12,
        "updated_at": "2023-06-29T17:44:54.000000Z",
        "created_at": "2023-06-29T17:44:54.000000Z",
        "item_images": [
            {
                "id": 10,
                "item_id": 32,
                "image_path": "images/not6AvMfcHEAzaSZ8j2SWkiqJEarSiHpZrordikz.png",
                "created_at": "2023-06-29T17:44:54.000000Z",
                "updated_at": "2023-06-29T17:44:54.000000Z"
            },
            {
                "id": 11,
                "item_id": 32,
                "image_path": "images/Ue76kf1KEpGieMWRS4u7VHtKNNF1quizQHsPOcAt.jpg",
                "created_at": "2023-06-29T17:44:55.000000Z",
                "updated_at": "2023-06-29T17:44:55.000000Z"
            }
        ]
    },
    "category": {
        "id": 1,
        "name": "cat1"
    }
}
```

### Create Object Item

- **URL:** `/ObjectItem`
- **Method:** POST
- **Description:** Create a new object item.
- **Responce:** 
```console
{
    "message": "created successfully",
    "data": {
        "condition": "1",
        "category_id": "1",
        "item_id": 33,
        "updated_at": "2023-06-29T17:47:11.000000Z",
        "created_at": "2023-06-29T17:47:11.000000Z",
        "id": 30,
        "item": {
            "id": 33,
            "name": "sa",
            "user_id": 1,
            "description": "descriptiondescriptio",
            "address": "addressaddress",
            "availabilities": 1,
            "booked": 1,
            "score_cost": 12,
            "updated_at": "2023-06-29T17:47:10.000000Z",
            "created_at": "2023-06-29T17:47:10.000000Z",
            "item_images": [
                {
                    "id": 12,
                    "item_id": 33,
                    "image_path": "images/yslZove8ztU5VyiPNvwbikKyhjgwg9PORUvwRIw0.png",
                    "created_at": "2023-06-29T17:47:11.000000Z",
                    "updated_at": "2023-06-29T17:47:11.000000Z"
                },
                {
                    "id": 13,
                    "item_id": 33,
                    "image_path": "images/zTm1puHingjYScnDqW8t1d3ybw45YKV4iTZCN5Ue.jpg",
                    "created_at": "2023-06-29T17:47:11.000000Z",
                    "updated_at": "2023-06-29T17:47:11.000000Z"
                }
            ]
        },
        "category": {
            "id": 1,
            "name": "cat1",
            "parent_id": null,
            "updated_at": null,
            "created_at": "2023-06-28T07:25:18.000000Z"
        }
    }
}
```

### Update Object Item

- **URL:** `/ObjectItem/{id}`
- **Method:** PUT
- **Description:** Update an existing object item by ID.
- **Responce:** 
```console
{
    "message": "Update successfully",
    "data": {
        "condition": "1",
        "category_id": "1",
        "item_id": 33,
        "updated_at": "2023-06-29T17:47:11.000000Z",
        "created_at": "2023-06-29T17:47:11.000000Z",
        "id": 30,
        "item": {
            "id": 33,
            "name": "sa",
            "user_id": 1,
            "description": "descriptiondescriptio",
            "address": "addressaddress",
            "availabilities": 1,
            "booked": 1,
            "score_cost": 12,
            "updated_at": "2023-06-29T17:47:10.000000Z",
            "created_at": "2023-06-29T17:47:10.000000Z",
            "item_images": [
                {
                    "id": 12,
                    "item_id": 33,
                    "image_path": "images/yslZove8ztU5VyiPNvwbikKyhjgwg9PORUvwRIw0.png",
                    "created_at": "2023-06-29T17:47:11.000000Z",
                    "updated_at": "2023-06-29T17:47:11.000000Z"
                },
                {
                    "id": 13,
                    "item_id": 33,
                    "image_path": "images/zTm1puHingjYScnDqW8t1d3ybw45YKV4iTZCN5Ue.jpg",
                    "created_at": "2023-06-29T17:47:11.000000Z",
                    "updated_at": "2023-06-29T17:47:11.000000Z"
                }
            ]
        },
        "category": {
            "id": 1,
            "name": "cat1",
            "parent_id": null,
            "updated_at": null,
            "created_at": "2023-06-28T07:25:18.000000Z"
        }
    }
}
```

### Delete Object Item

- **URL:** `/ObjectItem/{id}`
- **Method:** DELETE
- **Description:** Delete an object item by ID.

### Get Object Items Created by Me

- **URL:** `/Objectme`
- **Method:** GET
- **Description:** Retrieve a list of object items created by the current user.

## Authentication

The API endpoints require authentication. To access protected routes, include the JWT token in the `Authorization` header of the request. The token can be obtained by making a `POST` request to `/api/login` with valid credentials.


