

-- Insertion
insert into CandyProducts (productName, description, price, imageURL)
values
('Peppermint Swirl Delights', 'Delicious peppermint-flavored swirl candies.', 4.99, 'Assets/Img/default1.jpg'),
('Ghostly Gummies', 'Spooky and chewy gummy candies in ghost shapes.', 3.49, 'Assets/Img/default2.jpg'),
('Christmas Cocoa Crunch', 'Crunchy cocoa bites with a festive twist.', 4.79, 'Assets/Img/default3.jpg'),
('Spooky S''mores Bites', 'Tiny bites of spookily delicious s''mores.', 2.99, 'Assets/Img/default4.jpg'),
('Jingle Bell Jellies', 'Colorful jellies that jingle in your mouth.', 4.25, 'Assets/Img/default5.jpg'),
('Witch''s Brew Bonbons', 'Magically brewed bonbons with a hint of mystery.', 3.99, 'Assets/Img/default6.jpg'),
('Frosted Pumpkin Pops', 'Pumpkin-flavored popsicles with a frosty coating.', 4.49, 'Assets/Img/default7.jpg'),
('Yuletide Taffy Treats', 'Sweet and stretchy taffy treats for the holiday season.', 3.75, 'Assets/Img/default8.jpg'),
('Caramel Apple Delights', 'Irresistible caramel-covered apple candies.', 4.50, 'Assets/Img/default9.jpg'),
('Snowflake Sugar Drops', 'Delicate sugar drops shaped like snowflakes.', 3.95, 'Assets/Img/default10.jpg');

insert into User (username, password, email, firstName, lastName)
values
('Krunal', 'password', 'krunal@email.com', 'Krunal', 'Priyadarshi'),
('Ritul', 'password', 'ritul@email.com', 'Ritulkumar', 'Patel'),
('Rutuben', 'password', 'rutuben@email.com', 'Rutuben', 'Kachhadia'),
('Meet', 'password', 'meet@email.com', 'Meetkumar', 'Baldha');

Select count(*) as users from User;
Select count(*) as candy from CandyProducts;