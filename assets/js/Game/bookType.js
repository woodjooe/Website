class bookType extends GameObject {
    constructor(config){
        super(config);
        this.type=config.type;
        this.c=config.c ||0;
    
    
    
    
    }
drawBookType(ctx,cameraPerson){
    ctx.drawImage(
        this.image.src,
        utils.withGrid(this.x)-cameraPerson.x,
        utils.withGrid(this.y)-cameraPerson.y)

}
download(fileUrl, fileName) {
    var a = document.createElement("a");
    a.href = fileUrl;
    a.setAttribute("download", fileName);
    a.click();
}

update(state,cameraPerson){
    if(state.arrow=="A" && cameraPerson.x===this.x && cameraPerson.y-16===this.y && this.c){
        switch(this.type){
            case "Fantasy":
                this.download("../../assets/books/hyp.jpg");
                break;
            case "Thriller":
                this.download("../../assets/books/Fyodor.jpg");
                break;
            case "History":
                this.download("../../assets/books/Jug.jpg");
                break;
            case "Philosophy":
                this.download("../../assets/books/niet.jpg");
                break;
        }
        console.log("downloading");
        console.log("wait");
        this.c=0;
        //setTimeout(this.c=1,1000);
        return;
    }

}
}

