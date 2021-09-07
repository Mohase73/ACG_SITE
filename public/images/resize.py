from PIL import Image
image = Image.open('pillone_about.jpeg')
new = image.resize((1920,1280))
#print('new',new.size)
new.save('pillone_about.jpeg')
new.show()
