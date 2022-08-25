#!/usr/bin/env python
import re, os
count = 0
arrayHref = []
arrayTitle = []
arrayTitleReCompileStatement =[]
arrayEdraw = []
arrayEdraw2 = []
hrefIDArray = []
#This is to store the Original EDraw gTags string into a var
#********************************************DO NOT FORGET TO Write "DelID11" + The DeliverableID or LocalNavTag ID 
#when labeling EDraw's modal button placeholders... I REPEAT, IT WONT WORK WITHOUT DOING THIS!!!!!!!!!!!!!!!!!!!************ 
f = open('WireFrame_EDraw.html',"r")
string = f.read()
batRegex = re.compile(r'<g.*</g>')
titles = batRegex.findall(string)
for title in titles:
  OriginalGTagString = title
#Split into an array by each anchor tag  
Gtags = OriginalGTagString.split('</g>')  
count = 0
for x in Gtags:
    Gtags[count] = re.sub('path=\"\#[a-zA-Z0-0]"','', Gtags[count])
    Gtags[count] = re.sub('fill=\"\#[a-zA-Z0-0]"','', Gtags[count])
    Gtags[count] = x + "</g>"
    count += 1
  
#This is to get the full title and id from the modal HTML page
 
#This is to get the WebPageTitles and arrayHref arrays
ModalButtons = open("WireFrame_ModalButtons.html", "r")
count = 0
for line in ModalButtons:
    if re.search("<a onclick=.*</h4></a>", line):
        batRegex = re.compile(r'<a onclick=.*</h4></a>')
        tags = batRegex.findall(line)
        for tag in tags:
            arrayHref.append(tag)

        batRegex = re.compile(r'DelID11[0-9]*')
        tags = batRegex.findall(line)
        for tag in tags:
            arrayTemp = tag.replace("DelID11","")
            hrefIDArray.append(arrayTemp)
            



    
    batRegex = re.compile(r'\*\*\*.*\*\*\*')
    m1=batRegex.search(line)
    titles = batRegex.findall(line)
    for title in titles:
        arrayTitleReCompileStatement.append(title)
        arrayTitleReCompileStatement[count] = arrayTitleReCompileStatement[count].replace('*','')
        count +=1 

    
    
#format each g tag within the GTag Array   
for x in hrefIDArray:
    pattern = re.compile('.*DelID11'+ x +'.*')
    count = 0
    count1 = 0
    for y in arrayHref:

        if pattern.match(y):
            
            #We need to match titles to the array tags
            count = 0
            pattern2 = re.compile('^'+ x +'\.\).*')
            for a in arrayTitleReCompileStatement:
                
                if pattern2.match(a): 
                    print(a)
                    for z in Gtags:
                        if pattern.match(z):   
                            print("ya")
                            LeadATag = re.sub(r'<h4>.*</h4></a>', '', y)
                            Gtags[count] =  LeadATag + z + "</a>"
                            Gtags[count]  = re.sub('>DelID11'+x,'>'+ a, Gtags[count])
                        
                        count += 1      

#Get the Div Modal windows into a string
f = open("WireFrame_ModalButtons.html","r")
string = f.read()
titles = re.findall(r'<div id.*</div>',string, re.DOTALL)

stringModal = ""
count = 0
for title in titles:
    stringModal += title
ArrayModal = re.split(r'</div>.*<br>', stringModal)


count = 0
FinalModalString = ''
for x in ArrayModal:
    ArrayModal[count] = ArrayModal[count] + "</div>"
    FinalModalString += ArrayModal[count] 

    count += 1
FinalModalString = "</svg></div>" + FinalModalString
FinalModalString = re.sub(r'[<\/div>]+[\n]*<\/div>$', '', FinalModalString)


#get <link> and <styles> into string
f = open("WireFrame_ModalButtons.html","r")
string = f.read()
titles = re.findall(r'<link[\n\s\S.*]*</script>',string, re.DOTALL)
stringLinkRef = ""
count = 0
for title in titles:
    stringLinkRef += title
stringLinkRef =  stringLinkRef + "</head>" 


#Feed New array into string variable
NewGtagString = ''
count = 0
for x in Gtags:
    NewGtagString += str(x)

    count += 1

    

#Replace Edraw.html g tags with modal g tag string

# Read in the file
with open('WireFrame_Edraw.html', 'r') as file :
    filedata = file.read()
# Replace the target string
result = re.sub(r'<g[\n\s\S.*]*</g>',NewGtagString ,filedata) 
result = result.replace(r'</svg></div>',FinalModalString) 
result = result.replace(r'</head>', stringLinkRef) 
result = re.sub(r'href=\"http:\/\/localhost\/.*?=[0-9]#', '', result) 

          
#overwrite original Edraw.htm
file='WireFrame_Edraw.html' 
with open(file, 'w') as filetowrite:
    filetowrite.write(result)
    
    filetowrite.close()
    
#Match Div Modal Windows
modalString = ''
ModalButtons = open("WireFrame_ModalButtons.html", "r")
for line in ModalButtons:
    modalString += line

string = ModalButtons.read()
batRegex = re.search(r'<a href(.|\n)*</div>', modalString)
#This is to get the WebPageTitles and arrayHref array?
count = 0


