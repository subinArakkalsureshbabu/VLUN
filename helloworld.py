from flask import *
app = Flask(__name__, static_url_path='/static')


@app.route('/')
def hello_world():
    return render_template('second.html')

if __name__ == '__main__':
    app.run()