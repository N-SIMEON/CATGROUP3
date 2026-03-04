# Musanze Digital Service Desk

**INES-Ruhengeri CAT Assignment**

## Folder Structure (MVC)
```
CAT_GROUP/
├── app/
│   ├── controllers/   RecordController.php
│   ├── models/        RecordModel.php
│   ├── views/         home.html
│   └── create.php     (MVC router)
├── config/
│   └── db.php         (DB connection — Task A3)
├── public/
│   └── index.php      (Entry point — Task A4)
├── assets/
│   ├── css/style.css
│   └── js/app.js
├── database/
│   └── schema.sql
└── docs/
    └── README.md
```

## Setup
1. Upload folder to `htdocs` on InfinityFree
2. Paste `database/schema.sql` into phpMyAdmin
3. Edit `config/db.php` with your DB credentials
4. Visit: `https://yoursite.infinityfreeapp.com/CAT_GROUP/public/`

## Test Flow
1. Select service → enter values → see live total → Save → success message → record in table
