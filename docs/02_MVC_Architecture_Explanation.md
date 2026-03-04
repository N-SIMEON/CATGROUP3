# MVC Architecture Explanation

## What is MVC?

MVC stands for:

- Model → Handles database operations
- View → Handles user interface
- Controller → Handles logic between Model and View

---

## How MVC Is Implemented

### Model
Location:
app/models/Service.php

Responsibilities:
- Insert service record
- Retrieve all records

---

### Controller
Location:
app/controllers/ServiceController.php

Responsibilities:
- Handle form submission
- Call model functions
- Redirect after saving

---

### View
Locations:
- app/create.php
- public/index.php

Responsibilities:
- Display form
- Display table of records

---

### Entry Point
public/index.php

This file starts the system and loads records.