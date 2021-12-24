# assessment
GETTING STARTED	
These steps will get this Laravel Book API running for you 

1.  Clone the repository:  git clone https://github.com/akanmayowa/assessment.git
2.	Install all the dependencies using composer: composer install
3.	Create your own .env file 
4.	Generate your key ‘php artisan key: generate’
5.	Fill out your own database credentials
6.	Run migrations ‘php artisan migrate’
7.	Seed the database ‘php artisan db: seed’
8.	php artisan serve
9.	Test the API with POSTMAN

You can view the following API routes:
1.	Get all books: GET /api/v1/books
2.	Create a book: POST /api/v1/books
3.	Get a single book: GET /api/v1/books {Id}
4.	Update a book: PUT/PATCH /api/v1/books {Id}
5.	Delete a book: DELETE /api/v1/books {Id}
