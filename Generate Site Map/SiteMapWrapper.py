#!/usr/bin/env python
import re, os
count = 0
arrayHref = []
arrayTitle = []
arrayTitleReCompileStatement =[]
arrayEdraw = []
arrayEdraw2 = []

#This is to store the Original EDraw gTags into a var
f = open("SiteMap_EDraw.htm","r")
string = f.read()
batRegex = re.compile(r'<g .*<\/g>')
titles = batRegex.findall(string)
for title in titles:
    OriginalGTagString = title

Gtags = OriginalGTagString.split('</g>')  
count = 0
del Gtags[-1]
for x in Gtags:
    Gtags[count] = x + "</g>"
    count += 1

ModalButtons = open("SiteMap_ModalButtons.htm", "r")
#This is to get the WebPageTitles and arrayHref arrays
count = 0
for line in ModalButtons:
    if re.search("<a data-toggle='.*<h4 >\*\*\*.*\*\*\*</h4></a><br>", line):
        batRegex = re.compile(r"<a data-toggle='.*<h4 >\*\*\*.*\*\*\*</h4></a><br>")
        tags = batRegex.findall(line)
        for tag in tags:
            
            tig = re.sub(r"<h4 >\*\*\*.*\*\*\*<\/h4><\/a><br>","",tag)
            arrayHref.append(tig)
            
    
    batRegex = re.compile(r'\*\*\*.*\*\*\*')
    m1=batRegex.search(line)
    titles = batRegex.findall(line)
    for title in titles:
        arrayTitleReCompileStatement.append(title)
        arrayTitleReCompileStatement[count] = arrayTitleReCompileStatement[count].replace('*','')
        arrayTitleReCompileStatement[count] = arrayTitleReCompileStatement[count].replace(' ','.*')
        arrayTitleReCompileStatement[count] = arrayTitleReCompileStatement[count].replace('/','.*')
        arrayTitleReCompileStatement[count] = arrayTitleReCompileStatement[count].replace('-','.*')
        print(arrayTitleReCompileStatement[count] )
        count +=1 
        
    
#format each g tag within the GTag Array   
for x in arrayTitleReCompileStatement:
    pattern = re.compile(".*"+ x +".*")

    for y in arrayHref:
        if pattern.match(y):
            count = 0
            for z in Gtags:
                if pattern.match(z):
                    Gtags[count] = y + z + "</a>"
                count += 1
        

#Get the Div Modal windows into a string
f = open("SiteMap_ModalButtons.htm","r")
string = f.read()
titles = re.findall(r'<div id="ORDModal" class="modal fade" >[\s\S.*]*</div>',string, re.DOTALL)
stringModal = ""
count = 0
for title in titles:
  stringModal += "</svg></div>" +title


#get <link> and <styles> into string
f = open("SiteMap_ModalButtons.htm","r")
string = f.read()
titles = re.findall(r'<link.*</script>',string, re.DOTALL)
stringLinkRef = ""
count = 0
for title in titles:
    stringLinkRef += title
stringLinkRef = "<head>" + stringLinkRef




#Feed New array into string variable
NewGtagString = ''
count = 0
for x in Gtags:
    NewGtagString += str(x)
    count += 1
print(NewGtagString)
  

#Replace Edraw.html g tags with modal g tag string

# Read in the file
with open('SiteMap_EDraw.htm', 'r') as file :
    filedata = file.read()
# Replace the target string

result = re.sub(r'</svg></div>',stringModal  ,filedata) 
result = result.replace(r'<head>', stringLinkRef) 
result = re.sub(r'<g.*</g>',NewGtagString ,result) 

  
#overwrite original Edraw.htm
file='SiteMap_EDraw.htm' 
with open(file, 'w') as filetowrite:
    filetowrite.write(result)
    filetowrite.close()
    
#Match Div Modal Windows
modalString = ''
ModalButtons = open("SiteMap_ModalButtons.htm", "r")
for line in ModalButtons:
    modalString += line


string = ModalButtons.read()
batRegex = re.search(r'<a href(.|\n)*</div>', modalString)


#This is to get the WebPageTitles and arrayHref arrays
count = 0



