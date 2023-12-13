
function EmployeeLeave(id, name, startDate, endDate, remaining, overLap, status, comment, attachments){
        this.id = id;
        this.name = name;
        this.startDate = startDate;
        this.endDate = endDate;
        this.remaining = remaining;
        this.overTime = overLap;
        this.status = status;
        this.comment = comment;
        this.attachments = attachments;
}

EmployeeLeave.prototype.getID = function (){
    return this.id;
}
EmployeeLeave.prototype.getName = function (){
    return this.name;
}
EmployeeLeave.prototype.startDate = function (){
    return this.startDate;
}
EmployeeLeave.prototype.getEndDate = function (){
    return this.endDate;
}
EmployeeLeave.prototype.getRemaining = function (){
    return this.remaining;
}
EmployeeLeave.prototype.getOverLap = function (){
    return this.overTime;
}
EmployeeLeave.prototype.getStatus = function (){
    return this.status;
}
EmployeeLeave.prototype.getComment = function (){
    return this.comment;
}

EmployeeLeave.prototype.getAttachments = function (){
    return this.attachments;
}

