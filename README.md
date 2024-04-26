
# Hi 👋, I'm Tom (Tamilselvan)
# Real-time Face Recognition Using FaceNet and Haar Cascade for Door Monitoring

This project implements real-time face recognition using the FaceNet model and Haar Cascade for door monitoring. The system detects and recognizes faces using a webcam or video feed, comparing detected faces against a database of known faces to grant or deny access.

# Overview
The project consists of several components:

* **`Training.ipynb:`** Jupyter Notebook used to train the FaceNet model and create a face database using known face images.

* **`Monitoring.ipynb:`** Jupyter Notebook for real-time face recognition using the trained FaceNet model and Haar Cascade face detection.

* **`index.php:`** PHP script for handling user registration and login functionalities.

* **`db.php:`** PHP script for database connection and user authentication.

* **`main.php:`** PHP script to display a gallery of detected unknown faces.

* **`script.js:`** JavaScript file to handle form slide animations in the login/signup page.

* **`style.css:`** CSS stylesheet for styling the login/signup page.

# Prerequisites

* Python 3.x
* OpenCV (for face detection)
* Keras with TensorFlow backend (for FaceNet)
* PHP and MySQL (for database connectivity)

# Usage

### 1.Training the FaceNet Model:
- Use Training.ipynb to train the FaceNet model with images of known individuals. Update the image folders and database configurations as needed.

### 2.Monitoring Real-time Face Recognition:
- Run Monitoring.ipynb to start the real-time face recognition system. Ensure your webcam is connected and configured properly.
### 3.Web Interface:
- Use index.php to access the login/signup form.
- After authentication, navigate to main.php to view the image gallery of captured unknown faces.

# Setup Instructions

#### 1. Clone this repository:

```bash
  git clone https://github.com/developer-luci/Real-time-Face-Recognition-Using-FaceNet-and-Haar-Cascade-for-Door-Monitoring.git
```
#### 2. Set up the required libraries and dependencies in your Python environment.
#### 3. Configure the PHP and MySQL database settings in `db.php`.
#### 4. Start the real-time monitoring process by running `Monitoring.ipynb`.

# Acknowledgments
* This project utilizes the FaceNet model implementation from the `keras-facenet` library.
* Face detection is performed using the Haar Cascade classifier provided by OpenCV.

# License

This project is licensed under the [MIT License](https://choosealicense.com/licenses/mit/).

