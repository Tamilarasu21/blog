function validate()
{
    var title=document.getElementById("title");
    var category=document.getElementById("category");
    var content=document.getElementById("content");
    var keywords=document.getElementById("keywords");

    if(title.value.trim() == "" || title.value == null){
        title.style.border="1px solid red";
        title.style.boxShadow="4px";
        title.style.outline="none";
        return false;
    }else if(category.value == ""){
        category.style.border="1px solid red";
        category.style.boxShadow="4px";
        category.style.outline="none";
        return false;
    }else if(content.value == ""){
        content.style.border="1px solid red";
        return false;
    }else if(keywords.value == ""){
        keywords.style.border="1px solid red";
        return false;
    }else{
        alert("awesome");
        return true;
    }
}