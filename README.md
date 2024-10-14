


# LegaEase

This project is a web-based platform designed to connect clients with lawyers using machine learning for personalized recommendations. The system also provides additional features like document processing, OCR (Optical Character Recognition), a legal document generator, and an interactive chatbot for user support.PHP file were created to see the website designs on local server.

## Features

- **Lawyer Recommendation System**: Implemented using a Convolutional Neural Network (CNN) algorithm to provide clients with personalized lawyer recommendations based on user preferences and case data.
- **OCR and Document Generator**: Automated document processing with OCR to extract text from images and generate legal documents dynamically.
- **Chatbot**: Utilizes a K-Nearest Neighbor (KNN) algorithm to provide interactive user support, answering queries and enhancing the user experience.
- **Database**: Powered by MongoDB to manage dynamic data storage for user information, lawyer details, and legal documents.

## Tools and Technologies Used

- **Flask**: Python micro-framework for building web applications.
- **MongoDB**: NoSQL database for dynamic and flexible data storage. (further used AWS to store data.)
- **TensorFlow**: For building and training the machine learning model (CNN).
- **KNN Algorithm**: Used for developing the chatbot.
- **OCR**: Integrated for text extraction from images.

## Prerequisites

To run this project locally, you will need the following:

- Python 3.8+
- Flask
- MongoDB
- TensorFlow
- AWS account (optional for cloud deployment)

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/karishma223/LegaEase.git
cd LegaEase
```

### 2. Set Up Virtual Environment

Create and activate a virtual environment to manage dependencies:

```bash
# For Windows
python -m venv venv
venv\Scripts\activate

# For MacOS/Linux
python3 -m venv venv
source venv/bin/activate
```

### 3. Install Dependencies

Install all the necessary libraries and modules:

```bash
pip install -r requirements.txt
```

Ensure `requirements.txt` includes the following (or add based on your project needs):

```txt
Flask==2.0.1
tensorflow==2.6.0
pymongo==3.12.0
opencv-python==4.5.3
scikit-learn==0.24.2
```

### 4. Set Up MongoDB

- Install and run MongoDB locally or use a cloud-based MongoDB service like MongoDB Atlas.
- Configure the MongoDB connection in your Flask application.

### 5. Run the Flask Application

```bash
flask run
```

The application will be accessible at `http://127.0.0.1:5000/`.

### 6. Deployment

To deploy the application on AWS, follow these steps:

1. Set up an EC2 instance or use Elastic Beanstalk.
2. Configure your MongoDB instance to allow remote connections (for cloud deployment).
3. Set up the necessary environment variables for AWS services.

## Project Structure

```
LegaEase/
│
├── app/
│   ├── static/
│   │   ├── css/
│   │   ├── js/
│   ├── templates/
│   │   ├── index.html
│   │   └── dashboard.html
│   ├── __init__.py
├── models/
│   ├── recommendation_model.py
│   ├── chatbot_knn.py
│   └── ocr.py
├── app.py
├── requirements.txt
└── README.md
```

## Future Enhancements

- Add real-time chat functionality for better user-lawyer interaction.
- Improve document generation to support multiple legal document templates.
- Integrate more advanced machine learning techniques for lawyer recommendations.


### Additional Notes:

- Be sure to customize paths, filenames, and package versions to match your specific project setup.
- Deployment on AWS is optional.

--- 

