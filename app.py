from flask import Flask, render_template, request
app = Flask(__name__)

@app.route("/")
def output():
	return render_template('index.html') #home page

@app.route("/login")
def login():
	return render_template('login.html') #login page

@app.route("/about.html")
def login():
	return render_template('about.html') #login page

if __name__ == "__main__":
	app.run(debug = True)




#python json_io.py
