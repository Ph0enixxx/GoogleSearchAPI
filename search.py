from flask import Flask
from flask import request
import requests
import re
import json
import sys
app = Flask(__name__)
@app.route('/search', methods=['POST', 'GET'])
def hello_world():
    key=request.args.get('key', '')
    page=request.args.get('page', '')
    r=requests.get("https://www.google.com/search?q="+key+'&start='+str((int(page)-1)*10))
    res=re.findall(r'url\?q=(.*?)&amp.*?(<b>.*?>)<',r.text)
    lst=[]
    for i in res:
        i={'url':i[0],'title':i[1]}
        lst.append(i)
#print(lst)
#return 'Hello World!'+key
    return json.dumps(lst)
if __name__ == '__main__':
    app.run(host='103.253.147.155')#change to your hostname
