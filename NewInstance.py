import os
import shutil
import re
#Create a new project directory
ProjectName = raw_input ("Title this new project.")
newpath = "C:\\wamp64\\www\\" 
newpath = newpath + ProjectName
if not os.path.exists(newpath):
    os.makedirs(newpath)

#Copy template files to new location
root_src_dir = os.path.join('.','C:\\wamp64\\www\\BettaBetaTest')
root_target_dir = os.path.join('.', newpath)

operation= 'copy' # 'copy' or 'move'

for src_dir, dirs, files in os.walk(root_src_dir):
    dst_dir = src_dir.replace(root_src_dir, root_target_dir)
    if not os.path.exists(dst_dir):
        os.mkdir(dst_dir)
    for file_ in files:
        src_file = os.path.join(src_dir, file_)
        dst_file = os.path.join(dst_dir, file_)
        if os.path.exists(dst_file):
            os.remove(dst_file)
        if operation is 'copy':
            shutil.copy(src_file, dst_dir)
        elif operation is 'move':
            shutil.move(src_file, dst_dir)
			
#Grep all relevant files for database entries, replace with the new project name
myFiles = [
            'Add_Deliverable_Global.php' ,
            'Add_Deliverable_Local.php',
            'add_vhost.php', 
            'Add_Deliverable_To_Collab.php',
            'Create Global Tag.php ',
            'Create Employee Profile.php',
            'Create Local Tag.php',
            'Delete_Strategy_Goal.php',
            'Edit_Collaborators.php',
            'Edit_Deliverable.php',
            'Edit_Global_Navigation_Tag.php',
            'Edit_Local_Navigation_Tag.php',
            'Edit_Requirement.php',
            'GenerateORDcol.2.php',
            'GenerateSiteMapNodes.php',
			      'GenerateWireFrame.php',
            'GenerateCollabSheet.php',
            'index.php' ,
            'jquery.min.js',
			      'jquery-sortable.js',
            'MainDashBoard.php',
            'NewInstance.py',
            'Remove_Deliverable_From_Collab.php',
            'Remove_Deliverable_Global.php',
            'Remove_Deliverable_Local.php',
            'RERAWER.php',
            'style.css',
            'Submit Business Objective.php',
            'Submit Deliverable.php',
            'Submit Requirement.php',
            'Submit User Objective.php',                                                         
            'SubmitStrategy.php',
            'testlist.php  ',
            'test_sockets.php',
            
 
 
 
 
 
 ]

		
for filename in myFiles:
	#Store file contents into a variable
	editDatabase = newpath + "\\" + filename
	editDatabase2 = "C:\\wamp64\\www\\BettaBetaTest\\" + filename
	#---
	with open(editDatabase2) as infile, open(editDatabase, 'w') as outfile:
		for line in infile:
			
			line = line.replace("BettaBetaTest", ProjectName)
			line = line.replace("BettaBetaTest", ProjectName)
			print(line)
			outfile.write(line)
		#outfile.write(block)
	#---


		
