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
INSERT INTO Stats_T(Can1Poll, Can2Poll, Can3Poll, DateOfRecord) VALUES
('43%','44%','6%',str_to_date('NOV,04,16 15,45','%b,%d,%Y %i,%s')),
('42%','45%','5%',str_to_date('NOV,03,16 15,45','%b,%d,%Y %i,%s')),
('44%','44%','4%',str_to_date('NOV,02,16 15,45','%b,%d,%Y %i,%s')),
('46%','45%','3%',str_to_date('NOV,01,16 15,45','%b,%d,%Y %i,%s')),
('47%','43%','No Data',str_to_date('OCT,31,16 15,45','%b,%d,%Y %i,%s')),
('45%','46%','4%',str_to_date('OCT,30,16 15,45','%b,%d,%Y %i,%s')),
('46%','44%','No Data',str_to_date('OCT,29,16 15,45','%b,%d,%Y %i,%s')),
('46%','44%','No Data',str_to_date('OCT,28,16 15,45','%b,%d,%Y %i,%s')),
('40%','46%','6%',str_to_date('OCT,27,16 15,45','%b,%d,%Y %i,%s'));

/* Add More Data Here For Before October 27th, 2016 */

SELECT * FROM STATS_T;

DELETE FROM Stats_T
	WHERE StatID = 4;