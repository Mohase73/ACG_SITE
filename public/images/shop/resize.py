from PIL import Image
image = Image.open('01.jpeg')
new = image.resize((1000,1000))
#print('new',new.size)
new.save('01.jpeg')
new.show()
