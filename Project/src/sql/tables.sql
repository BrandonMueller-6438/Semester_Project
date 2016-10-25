DROP TABLE Candidates_T;
DROP TABLE Stats_T;

/* Intended to contain one record with the three presidential candiates */
CREATE TABLE Candidates_T
	(CandidatesID			INT(11)				NOT NULL AUTO_INCREMENT,
	Candidate1				varchar(64)				NOT NULL,
	Candidate2				varchar(64),
	Candidate3				varchar(64),
CONSTRAINT Candidates_PK PRIMARY KEY (CandidatesID));


/* Intended to contain polling data for corresponding dates to display on table or graph */
CREATE TABLE Stats_T
	(StatID					INT(11)			NOT NULL AUTO_INCREMENT,
	Can1Poll				varchar(64),		
	Can2Poll				varchar(64),
	Can3Poll				varchar(64),
	DateOfRecord			DATE,
CONSTRAINT Stats_PK PRIMARY KEY (StatID));

/* Select Everything In The Tables */
SELECT * FROM Candidates_T;
SELECT * FROM Stats_t;

/* Insert Information Into The Candidates Table */
INSERT INTO Candidates_T(Candidate1, Candidate2, Candidate3) VALUES('Donald J. Trump','Hillary R. Clinton','Gary E. Johnson');

/* Inset Information Into The Stats Table */
INSERT INTO Stats_T(Can1Poll, Can2Poll, Can3Poll, DateOfRecord) VALUES('95%','-17%','8%',str_to_date('OCT,28,14 15,45','%b,%d,%Y %i,%s'));