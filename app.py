from flask import Flask, render_template
app = Flask(__name__)

@app.route("/")
def output():
	return render_template('index.html') #home page

if __name__ == "__main__":
	app.run(debug = True)




#python json_io.py
