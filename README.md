
# 📚 Student Registration Form  

An online student registration system built using **HTML, CSS, JavaScript** for the frontend and **PHP, MySQL** for the backend, hosted on **XAMPP**.  
This project digitizes the manual registration process, making it **faster, accurate, and user-friendly**.

---

## 🚀 Features  
- ✅ Secure student registration & login  
- ✅ JavaScript form validation  
- ✅ MySQL database integration  
- ✅ PHP backend for data handling  
- ✅ Session management for logged-in users  
- ✅ Modern UI with a responsive design  

---

## 🖥️ Tech Stack  
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP (with XAMPP server)  
- **Database:** MySQL  
- **Server:** Apache (via XAMPP)  

---

## 📌 Project Structure  


PROJECT-1/
│── Registration\_project/
│   ├── src/
│   │   ├── Project.php       # Main registration page
│   │   ├── auth\_process.php  # Handles login/registration logic
│   │   ├── config.php        # Database connection
│   │   ├── logout.php        # Logout functionality
│   │   ├── Project.js        # JavaScript validation
│   │   ├── Project.css       # Stylesheet
│   │   └── image.jpg         # Background image


---

## 📸 Screenshots  


### 🔹 **1. Project Directory**  
      
<img width="1414" height="713" alt="Screenshot 2025-08-03 013646" src="https://github.com/user-attachments/assets/3c1f1671-bf05-4694-be4f-bddbc9e45751" />


### 🔹 **2. Home Page** 
<img width="1920" height="1080" alt="Screenshot 2025-08-02 165220" src="https://github.com/user-attachments/assets/c32692d9-ad5a-48a4-b768-46663d7aeb7c" />


### 🔹 **3. Registration Form**  
<img width="1920" height="1080" alt="Screenshot 2025-08-02 165249" src="https://github.com/user-attachments/assets/6af32240-9cec-40cb-b59a-c1a1fa15842d" />

### 🔹 **4. Login Successful**  
<img width="1920" height="1080" alt="Screenshot 2025-08-02 165432" src="https://github.com/user-attachments/assets/13d9b088-b81b-4e98-8780-92247cd4417d" />


### 🔹 **5. User Dropdown**  
<img width="1920" height="1080" alt="Screenshot 2025-08-02 165446" src="https://github.com/user-attachments/assets/c3d3c0c8-6b25-4f28-88ea-d6663455fa32" />


### 🔹 **6. Login Page**  
<img width="1920" height="1080" alt="Screenshot 2025-08-02 165752" src="https://github.com/user-attachments/assets/72342164-6414-4ea3-a7ae-65cb6a4600e8" />

### 🔹 **7. 🗄️ Database Screenshot (phpMyAdmin showing inserted records)
  <img width="1920" height="1080" alt="Screenshot 2025-08-02 170009" src="https://github.com/user-attachments/assets/a8f584f1-0536-4e8f-9b55-616f302a233b" />


---  

## 🛠️ Installation & Setup  

### ✅ **1. Clone or Download the Project**  

git clone https://github.com/amannsus/Registration_Form.git


### ✅ **2. Move Project to XAMPP's `htdocs` Folder**

C:/xampp/htdocs/PROJECT-1/


### ✅ **3. Import Database**

* Open **phpMyAdmin**.
* Create a new database, e.g., student_db.
* Import the provided .sql file.

### ✅ **4. Configure Database Connection**

Edit the config.php file and set your database credentials:

``php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "student_db";
$conn = new mysqli($host, $user, $password, $dbname);

### ✅ **5. Start XAMPP**

* Run Apache and MySQL.
* Open the browser and navigate to:


http://localhost/PROJECT-1/Registration_project/src/Project.php


---

## 🎬 Live Demo Instructions

1. Open **XAMPP Control Panel** → Start **Apache** & **MySQL**.
2. Go to your browser and visit:

   
   http://localhost/PROJECT-1/Registration_project/src/Project.php
   
3. Register as a new user.
4. Log in with your credentials to access the dashboard.
5. Verify that the database records are updated in phpMyAdmin.


---

## 📈 Result

✔️ Reduces manual workload and improves accuracy in student registration by **80%** with a reliable digital record system.

---

## 🤝 Contributing

Feel free to fork this repository, make changes, and submit pull requests.

---

## 📄 License

This project is licensed under the **MIT License** – you are free to use and modify it.

---

### 👨‍💻 Developed by \[Aman Kumar Chaudhary]




