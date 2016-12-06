DROP TABLE Users_T;

CREATE TABLE Users_T
	(UserID 		INT(8)		NOT NULL AUTO_INCREMENT,
	Username		VARCHAR(32)	NOT NULL,
	Password		VARCHAR(64)	NOT NULL,
	StateTableID	INT(8)		NOT NULL,
	CONSTRAINT Users_PK PRIMARY KEY (UserID),
	/*CONSTRAINT States_FK FOREIGN KEY (StateTableID) REFERENCES states_t(StateTableID)*/);
