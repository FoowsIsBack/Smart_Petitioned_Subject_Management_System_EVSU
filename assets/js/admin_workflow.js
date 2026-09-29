const workflowTableBody=document.getElementById("workflowTableBody");
const workflowSearch=document.getElementById("workflowSearch");
const noWorkflow=document.getElementById("noWorkflow");
const workflowModal=document.getElementById("workflowModal");
const closeWorkflowModal=document.getElementById("closeWorkflowModal");
const closeWorkflowButton=document.getElementById("closeWorkflowButton");
const workflowModalTitle=document.getElementById("workflowModalTitle");
const workflowModalStudent=document.getElementById("workflowModalStudent");

if(workflowSearch){
    workflowSearch.addEventListener("input",function(){
        const searchValue=this.value.toLowerCase().trim();
        const rows=workflowTableBody.querySelectorAll("tr");
        let visibleCount=0;

        rows.forEach(function(row){
            if(row.textContent.toLowerCase().includes(searchValue)){
                row.style.display="";
                visibleCount++;
            }else{
                row.style.display="none";
            }
        });

        if(noWorkflow){
            noWorkflow.style.display=visibleCount===0?"block":"none";
        }
    });
}

if(workflowTableBody){
    workflowTableBody.addEventListener("click",function(event){
        const trackButton=event.target.closest(".track_workflow_button");

        if(!trackButton){
            return;
        }

        const row=trackButton.closest("tr");

        if(!row){
            return;
        }

        const cells=row.querySelectorAll("td");

        const petitionId=cells[0].textContent.trim();
        const subject=cells[1].textContent.trim();
        const student=cells[2].textContent.trim();

        workflowModalTitle.textContent="Petition "+petitionId+" — "+subject;
        workflowModalStudent.textContent="Student: "+student;

        workflowModal.classList.add("show");
    });
}

if(closeWorkflowModal){
    closeWorkflowModal.addEventListener("click",function(){
        workflowModal.classList.remove("show");
    });
}

if(closeWorkflowButton){
    closeWorkflowButton.addEventListener("click",function(){
        workflowModal.classList.remove("show");
    });
}

if(workflowModal){
    workflowModal.addEventListener("click",function(event){
        if(event.target===workflowModal){
            workflowModal.classList.remove("show");
        }
    });
}

document.addEventListener("keydown",function(event){
    if(event.key==="Escape"&&workflowModal.classList.contains("show")){
        workflowModal.classList.remove("show");
    }
});