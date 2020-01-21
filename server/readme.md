# PHP_RESTAPI_SERVER

------

## 1.  HOST

```json
http://localhost/php_restapi_server/server/
```

## 2. ROUTES

- ### User

  | Method | Routes          | Description                 |
  | :----- | :-------------- | --------------------------- |
  | GET   | /mahasiswa | - Get All Data Mahasiswa         |
  | GET   | /mahaiswa?id=   | - Get Data Mahasiswa by ID                |
  | PUT   | /mahasiswa | - Update data Mahasiswa         |
  | DELETE   | /mahasiswa | - Delete Data Mahasiswa         |

## 3. Code's Status

- ### Success Code's

  | Code Status | Description |
  | ----------- | ----------- |
  | 200         | - Success   |
  | 201         | - Created   |

- ### Error Code's

  | Code Status | Description                          | Response                                                     |
  | :---------: | ------------------------------------ | ------------------------------------------------------------ |
  |     404     | - Not Found                          | { "Data Not Found!" }                                     |
  |     400     | - Bad Request                          | { "Bad Request!" }                                     |
  |     500     | - Internal server error              | { "Internal server error" }                                |

## 4. DETAIL REQUEST

- ## GET All Mahasiswa

  Get all data mahasiswa.

  - **URL**

    /mahasiswa

  - **Method:**

    `GET`

  - **URL Params**

    none

  - **Data Body**

    none

  - **Success Response:**

    - **Code:** 200 <br />
      **Content:** 

      ```json
      {
      "status": true,
      "data": [
          {
            "id": "1",
            "nrp": "043040001",
            "nama": "Doddy Ferdiansyah",
            "email": "doy@gmail.com",
            "jurusan": "Teknik Mesin"
          },
          {
            "id": "2",
            "nrp": "023040123",
            "nama": "Erik",
            "email": "erik@gmail.com",
            "jurusan": "Teknik Industri"
          },
          {
            "id": "3",
            "nrp": "043040321",
            "nama": "Rommy Fauzi",
            "email": "rommy@gmail.com",
            "jurusan": "Teknik Planologi"
          },
          {
            "id": "4",
            "nrp": "033040023",
            "nama": "Fajar Darmawan ",
            "email": "fajar@yahoo.com",
            "jurusan": "Teknik Informatika"
          },
          {
            "id": "5",
            "nrp": "113040321",
            "nama": "Ferry Mulyanto",
            "email": "ferry@yahoo.com",
            "jurusan": "Manajemen"
          }
      ]
    
  - ## GET Mahasiswa by ID

    Get data mahasiswa by ID.

    - **URL**

      /mahasiswa?id=

    - **Method:**

      `GET`

    - **URL Query**

      ```json 
      id = [Integer, required]

    - **Data Body**
      none

    - **Success Response:**

      - **Code:** 200 <br />
        **Content:** 

        ```json
        {
        "status": true,
        "data": [
            {
              "id": "1",
              "nrp": "043040001",
              "nama": "Doddy Ferdiansyah",
              "email": "doy@gmail.com",
              "jurusan": "Teknik Mesin"
            }
        ]

  - ## UPDATE Data Mahasiswa

    Update data mahasiswa by ID.

    - **URL**

      /mahasiswa

    - **Method:**

      `PUT`

    - **URL Params**

      none

    - **Data Body**
      ```json
      "nrp" = "required",
      "nama" = "required",
      "email" = "required",
      "jurusan" = "required",
      "id" = "required"

    - **Success Response:**

      - **Code:** 200 <br />
        **Content:** 

        ```json
        {
        "status": true,
        "message": "Success update data mahasiswa!"
        }

  - ## DELETE Data Mahasiswa

    Delete data mahasiswa by ID.

    - **URL**

      /mahasiswa

    - **Method:**

      `DELETE`

    - **URL Params**

      none

    - **Data Body**
      ```json
      "id" = "required"

    - **Success Response:**

      - **Code:** 200 <br />
        **Content:** 

        ```json
        {
        "status": true,
        "message": "Success deleted!"
        }