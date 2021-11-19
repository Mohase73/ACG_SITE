from PIL import Image
image = Image.open('Orange.jpg')
new = image.resize((160,160))
#print('new',new.size)
new.save('Orange.jpg')
new.show()
