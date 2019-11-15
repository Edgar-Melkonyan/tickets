# Tickets

Please find how to launch the application and the structure of the application bellow.

## Application launching

    1)From root folder run composer install 
	2)From root folder run php artisan:serve  
	3)Create .env from .env.example and provide credentials  
    4)Run php artisan:migrate
    5)From root folder run npm install 
    6)From root folder run npm run dev 

## Structure

- URL  
	- /
- HTTP Method  
	- GET
- View  
	- Create Ticket


##
	
- URL  
	- /ticket
- HTTP Method  
	- POST
- Operation  
	- Create ticket 
- Call Example 
	- /ticket	
- Request Body
    ```
    name 
    text
    type
    phone
## 	   
