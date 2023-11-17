-- Insertion
insert into CandyProducts (productName, description, price, imageURL)
values
('Peppermint Swirl Delights', 'Delicious peppermint-flavored swirl candies.', 4.99, 'assets/img/default1'),
('Ghostly Gummies', 'Spooky and chewy gummy candies in ghost shapes.', 3.49, 'assets/img/default2'),
('Christmas Cocoa Crunch', 'Crunchy cocoa bites with a festive twist.', 4.79, 'assets/img/default3'),
('Spooky S''mores Bites', 'Tiny bites of spookily delicious s''mores.', 2.99, 'assets/img/default4'),
('Jingle Bell Jellies', 'Colorful jellies that jingle in your mouth.', 4.25, 'assets/img/default5'),
('Witch''s Brew Bonbons', 'Magically brewed bonbons with a hint of mystery.', 3.99, 'assets/img/default6'),
('Frosted Pumpkin Pops', 'Pumpkin-flavored popsicles with a frosty coating.', 4.49, 'assets/img/default7'),
('Yuletide Taffy Treats', 'Sweet and stretchy taffy treats for the holiday season.', 3.75, 'assets/img/default8'),
('Caramel Apple Delights', 'Irresistible caramel-covered apple candies.', 4.50, 'assets/img/default9'),
('Snowflake Sugar Drops', 'Delicate sugar drops shaped like snowflakes.', 3.95, 'assets/img/default10');

insert into User (username, password, email, firstName, lastName)
values
('Krunal', 'password', 'krunal@email.com', 'Krunal', 'Priyadarshi'),
('Ritul', 'password', 'ritul@email.com', 'Ritulkumar', 'Patel'),
('Rutuben', 'password', 'rutuben@email.com', 'Rutuben', 'Kachhadia'),
('Meet', 'password', 'meet@email.com', 'Meetkumar', 'Baldha');

Select count(*) as users from User;
Select count(*) as candy from CandyProducts;