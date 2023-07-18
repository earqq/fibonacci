# Fibonacci REST API

This is a simple REST API implementation in PHP using the Slim framework that calculates the Fibonacci value for a given index. The API provides an endpoint `/fibonacci/{n}` where `{n}` represents the index of the Fibonacci sequence.

## Technical Decisions

1. **Slim Framework**: The Slim framework was chosen for its simplicity and ease of use in building lightweight APIs. It provides a clean and expressive syntax for defining routes and handling HTTP requests.

2. **Recursive Fibonacci Calculation**: For the Fibonacci calculation, a recursive approach was implemented. This approach is simple to understand and straightforward to implement. However, it may not be efficient for larger values of `n` due to redundant calculations.

## Optimization Potential

1. **Iterative Fibonacci Calculation**: The current implementation uses a recursive function to calculate Fibonacci values. However, this approach can be inefficient for larger values of `n`. 

2. **Input Validation**: The current implementation assumes that the provided index `n` is a positive integer. However, input validation should be added to handle various edge cases and prevent invalid input. For example, checking for non-numeric input, negative numbers, or very large input values can enhance the API's robustness.

## Running the Project
To run the Fibonacci REST API project, follow these steps:

Clone the repository to your local machine:

bash
Copy code
git clone https://github.com/earqq/fibonacci/
Navigate to the project directory:

###
bash <br>
Copy code <br> 
cd fibonacci <br>
Install the project dependencies using Composer:

Copy code <br>
composer install <br>
Start the PHP built-in web server:
<br>
Copy code <br>
php -S localhost:8000 <br>
Open your web browser and access the API endpoint at http://localhost:8000/fibonacci/{n}, replacing {n} with the desired Fibonacci index.

### Example: http://localhost:8000/fibonacci/5

The API response will be displayed in JSON format.
