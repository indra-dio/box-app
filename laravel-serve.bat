@echo off
powershell -WindowStyle Hidden -Command "Start-Process 'php' 'C:\xampp\htdocs\box-app\artisan serve --host=0.0.0.0 --port=8000' -WindowStyle Hidden"
