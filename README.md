# Musanze Digital Service Desk
### CAT_GROUP #(3) — FEB_A | INES-Ruhengeri

---

## 📁 Project Structure (MVC)

```
CAT_GROUP_#(3)_FEB_A/
├── app/
│   ├── controllers/
│   │   └── ServiceController.php   ← Handles requests & responses
│   ├── models/
│   │   └── Service.php             ← Database operations
│   ├── views/
│   │   ├── form.php                ← Input form view
│   │   └── list.php                ← Records table view
│   └── create.php                  ← Form page entry point
├── assets/
│   ├── css/
│   │   └── style.css               ← Styling (Role 5)
│   └── js/
│       └── app.js                  ← Live total calculation (Role 5)
├── config/
│   └── db.php                      ← Database connection (Task A3)
├── database/
│   └── schema.sql                  ← SQL table definition (Role 7)
├── docs/
│   ├── 01_Project_Overview.md
│   ├── 02_MVC_Architecture_Explanation.md
│   ├── 03_Database_Documentation.md
│   ├── 04_System_Requirements.md
│   ├── 05_User_Manual.md
│   ├── 06_Technical_Documentation.md
│   ├── 07_Testing_Report.md
│   └── 08_Group_Roles.txt
├── public/
│   └── index.php                   ← Main entry point (Task A4)
└── README.md
```

---

## 👥 Group Members & Roles

| Member | Name | Reg No | Role | File(s) |
|--------|------|--------|------|---------|
| 1 | Gafar Mouatsm Babikir | 2528635 | Database Connection | `config/db.php` |
| 2 | Nayituriki Simeon | 2530692 | Entry Point / Role 2 | `public/index.php` |
| 3 | Iyabose Ishimwe Nicole | 2530365 | View Developer | `app/views/form.php` |
| 4 | Umurerwa Alliance | 2530681 | Role 4 | `app/views/list.php` |
| 5 | Dushimimana Salme | 2528419 | CSS & JS | `assets/css/style.css`, `assets/js/app.js` |
| 6 | — | — | Controller | `app/controllers/ServiceController.php` |
| 7 | — | — | Model | `app/models/Service.php` |

---

## 🗄️ Database Setup

**Database name:** `musanze_mvc`  
**Table:** `services`

Paste this into phpMyAdmin → SQL tab:

```sql
CREATE TABLE services (
    id           INT AUTO_INCREMENT PRIMARY KEY,
    service_type VARCHAR(50),
    client_name  VARCHAR(100),
    quantity     INT,
    price        DECIMAL(10,2),
    total        DECIMAL(10,2),
    created_at   TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

> ⚠️ On **InfinityFree**, skip the `CREATE DATABASE` line — your database is pre-created.  
> Update `config/db.php` with your InfinityFree credentials.

---

## ⚙️ Configuration (InfinityFree)

Edit `config/db.php`:

```php
$host   = "sql111.byetcluster.com";  // your InfinityFree DB host
$user   = "if0_xxxxxxx";             // your DB username
$pass   = "YOUR_PASSWORD";           // your DB password
$dbname = "if0_xxxxxxx_musanze_mvc"; // your DB name
```

---

## 🚀 How to Run

### Local (XAMPP)
1. Copy folder to `C:/xampp/htdocs/`
2. Start Apache & MySQL in XAMPP
3. Open phpMyAdmin → run `database/schema.sql`
4. Visit: `http://localhost/CAT_GROUP_#(3)_FEB_A/public/`

### InfinityFree (Live Hosting)
1. Upload & unzip into `htdocs/` using File Manager
2. Paste `database/schema.sql` into phpMyAdmin (skip `CREATE DATABASE` line)
3. Edit `config/db.php` with your real credentials
4. Visit: `https://yoursite.infinityfreeapp.com/CAT_GROUP_.../public/`

---

## ✅ Test Flow

1. Go to `public/index.php` → click **Create New Request**
2. Select a service type
3. Enter client name, quantity, and price
4. Watch the **live total** calculate automatically
5. Click **Save Record**
6. See the record appear in the records table

---

## 🔧 How MVC Works in This Project

```
Browser Request
      │
      ▼
public/index.php  ──────────────────► Loads ServiceController
      │                                       │
      │                               calls model methods
      │                                       │
      │                              Service.php (Model)
      │                               │
      │                         Queries MySQL DB
      │                               │
      ▼                               ▼
app/views/list.php         Returns data to controller
(renders records table)            │
                                    ▼
                          Controller passes to view
```

---

## 📋 Git Workflow

```bash
# Clone the repo
git clone <repository-url>

# Each member works on their file, then:
git add .
git commit -m "NAME | REG NO | ROLE: description of changes"
git push origin main
```

> Each member must have **at least one commit** as per assignment rules.

---

*INES-Ruhengeri — Scientia et Lux*
