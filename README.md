# Inn
#Create file upload HTML form and allow user to upload files to the server. Create upload file field. Perform client-side validation of the file size (use any implementation you #know) and allow only text files and images.

#When file is uploaded, check if it is not executable. If it's executable, reject it and show message to the user. If it's not, check if your storage has enough space to save #file. If it has not, show message to the user. If yes, move file to 'upload' folder inside your web root directory. Check if folder exists. If it does not, create it first. Use #'@' to create directory. Answer in code comment, why you use '@'.
#Get file info: file size, file name, file meta information (for images) and send it to the front-end as the response of the upload action and show to the user in user-friendly #way.


#Also, when downloading each file, you must write a log file. Place the log file in the /logs folder. Every day it is necessary to create a new log file. The format of the log #file name is "upload_ddmmyyyy.log". Information about each attempt to upload a file to the server must be entered in the log file. Therefore, the log file must contain the Date, #Time, file name, file size, information about whether the file was uploaded successfully (if it is not uploaded, then you need to write the reason to the log file).

#You should implement this application in OOP. Split logic and templates into separate files. Logic files should contain PHP code only, while templates should contain onl
