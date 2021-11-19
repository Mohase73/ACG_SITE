from PIL import Image
image = Image.open('ini_inf2.png')
new = image.resize((626,417))
#print('new',new.size)
new.save('ini_inf2.png')
new.show()
