# Database Documentation

## Database Name
musanze_mvc

## Table Name
services

---

## Table Structure

| Field Name     | Type           | Description |
|---------------|---------------|-------------|
| id            | INT (PK, AI)  | Unique ID |
| service_type  | VARCHAR(50)   | Type of service |
| client_name   | VARCHAR(100)  | Customer name |
| quantity      | INT           | Quantity |
| price         | DECIMAL(10,2) | Unit price |
| total         | DECIMAL(10,2) | Calculated total |
| created_at    | TIMESTAMP     | Auto-generated date |

---

## Relationships
This system uses one table only.

Future improvement:
- Separate table for services
- User authentication table