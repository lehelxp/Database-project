
-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `registration`
--

CREATE TABLE `registration` (
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Date of birth` date NOT NULL,
  `Email` text NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `registration`
--

INSERT INTO `registration` (`First Name`, `Last Name`, `Username`, `Password`, `Date of birth`, `Email`, `Country`) VALUES
('Ambrus', 'Lehel', 'Lehelxp', 'robotes', '1996-08-29', 'as_lehel11x@yahoo.com', 'Romania'),
('John', 'Dale', 'Jdale', '123456', '1970-09-06', 'j.dale@gmail.com', 'United Kingdom'),
('Jane', 'Heather', 'Jheart', '246810', '1992-05-20', 'jane@yahoo.com', 'France');
