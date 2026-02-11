import re
#1
'''
n="123-456-7890"
#pt=r'(\d\d\d)-(\d\d\d-\d\d\d\d)'
m=re.search(pt,n)
print(m.group(0))
print(m.group(1))
print(m.group(2))
#2
txt="http://google.com"
r=re.match(r'^http(s)?://',txt)
print(r)
'''
n='5,13,456'
print(re.search(r'\d{1,3}(,\d{3})',n))