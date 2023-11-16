from faker import Faker
import random

fake = Faker()

def generate_random_data(num_rows):
    data = []
    for _ in range(num_rows):
        row = (
            fake.random_int(min=1, max=99999999),    # ID
            fake.name(),                             # Customer Name
            fake.random_int(min=1, max=100),         # Quantity
            fake.random_int(min=10000000000, max=99999999999)  # Phone No
        )
        data.append(row)
    return data

def generate_insert_queries(data):
    queries = []
    for row in data:
        query = f"INSERT INTO `customer details` (`ID`, `Customer Name`, `Quantity`, `Phone No`) VALUES {row};"
        queries.append(query)
    return queries

# Set the number of rows you want
num_rows = 1000

# Generate random data
random_data = generate_random_data(num_rows)

# Generate SQL INSERT queries
insert_queries = generate_insert_queries(random_data)

# Print the generated SQL queries
for query in insert_queries:
    print(query)
