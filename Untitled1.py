#!/usr/bin/env python
# coding: utf-8

# In[ ]:


import random
#defining a base class
class Rectangle:
    #the _init_() function
    def __init__(self,width,length):
        self.width = width#define width 
        self.length = length#define length
    #define the area of a rectangle
    def area(self):
        area = self.length * self.width
        print('The area of your rectangle is:',area)
        return area
        
    def perimeter(self):
        perimeter = (2*self.length) + (2*self.width)
        print('The perimeter of your rectangle is:',perimeter)
        
    def printing(self):
        print('In Rectangle Class')
    #end of class definition
class box(Rectangle):#build a box of rectangles
    def __init__(self,width,length,height):
        Rectangle.__init__(self,width,length)
        self.height=height
        #width and length are inherted from the rectangle class
    def volume(self):
        volume=self.length * self.width * self.length
        print('The volume of your box is:',volume)
    def printing(self):
        print('In Box Class')
    def surface(self):
        surface=2*(self.width*self.length+self.height*self.length+self.height*self.width)
        print('The surface area of your box is:',surface)

class circle:
    def __init__(self,radius):
        self.radius = radius
    def diameter(self):
        diameter = 2*self.radius
        print('The diameter of your circle is:',diameter)
    def area(self):
        area = self.radius * self.radius * 3.14
        print('The area of your circle is:',area)
    def circumference(self):
        circumference = 2 * 3.14 * self.radius
        print('The circumference of your circle is:',circumference)
    def printing(self):
        print('In Circle Class')
        
r1 = Rectangle(2,5)

r1.area()

#call the perimeter method from the Rectangle object
r1.perimeter()
#call the pring method from the rectangle object
r1.printing()
#a box object called b1 that has a width of 5, length of 10, and height of 3
b1=box(r1.width,r1.length,4)
print('')

#call the volume method of the box b1
b1.volume()
b1.surface()
b1.printing()
print('')

c1=circle(5)
c1.diameter()
c1.area()
c1.circumference()
c1.printing()
print('')

c2=circle(34)
c2.diameter()
c2.area()
c2.circumference()
c2.printing()
print('')

total=0
number=[]
for n in range(10):
    l = random.randint(1,101)
    w = random.randint(1,101)
    r1 = Rectangle(l,w)
    number.append(r1)
for r in number:
    total=total+r.area()
print('The total of all areas are:',total)

