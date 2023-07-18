# Fibonacci REST API

This is a simple REST API implementation in PHP using the Slim framework that calculates the Fibonacci value for a given index. The API provides an endpoint `/fibonacci/{n}` where `{n}` represents the index of the Fibonacci sequence.

## Technical Decisions

1. **Slim Framework**: The Slim framework was chosen for its simplicity and ease of use in building lightweight APIs. It provides a clean and expressive syntax for defining routes and handling HTTP requests.

2. **Recursive Fibonacci Calculation**: For the Fibonacci calculation, a recursive approach was implemented. This approach is simple to understand and straightforward to implement. However, it may not be efficient for larger values of `n` due to redundant calculations.

## Optimization Potential

1. **Iterative Fibonacci Calculation**: The current implementation uses a recursive function to calculate Fibonacci values. However, this approach can be inefficient for larger values of `n`. 

2. **Input Validation**: The current implementation assumes that the provided index `n` is a positive integer. However, input validation should be added to handle various edge cases and prevent invalid input. For example, checking for non-numeric input, negative numbers, or very large input values can enhance the API's robustness.

