import re

ptr = r'option value=".*"'

with open('MainDashBoard.php', 'r') as file:
    for line in file:
        for match in re.finditer(ptr, line):
            print(match.group())