from flask import Flask, request, jsonify
from flask_mail import Mail, Message
import requests
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

app.config['MAIL_SERVER']='smtp.gmail.com'
app.config['MAIL_PORT'] = 465
app.config['MAIL_USERNAME'] = 'goldenneko8@gmail.com'
app.config['MAIL_PASSWORD'] = 'hello_123'
app.config['MAIL_USE_TLS'] = False
app.config['MAIL_USE_SSL'] = True
mail = Mail(app)

@app.route("/email", methods=["POST"])
def send_email():
    # if request.is_json:
    data = request.get_json()
    print(data)
    recipients = data['recipients']
    # try:
    msg = Message('Room Booking Confirmation', sender = 'goldenneko8@gmail.com', recipients = [recipients])
    msg.body = "Thank you for booking a room with us. Please show this email confirmation when visiting our outlets. Hope you will have a pleasant experience with us. See you!"
    mail.send(msg)

        # do the actual work
        # 1. Send order info {cart items}
    return jsonify(
        {
            "code": 200,
            "data": {
                "recipients" : recipients
                }
        }
    ), 200

    # except:
    #     return jsonify(
    #         {
    #             "code": 500,
    #             "data": {
    #                 "recipients" : recipients
    #             },
    #             "message": "An error occurred while trying to send email."
    #         }
    #     ), 500

    # if reached here, not a JSON request.
    # return jsonify({
    #     "code": 400,
    #     "message": "Invalid JSON input: " + str(request.get_data())
    # }), 400
#    msg = Message('TCM Booking Confirmation', sender = 'esmg5t4@gmail.com', recipients = ['jess.tedja@gmail.com'])
#    msg.body = "Hello Flask message sent from Flask-Mail"
#    mail.send(msg)
#    return "Sent"

if __name__ == '__main__':
   app.run(host="0.0.0.0", debug = True, port=5005)