.card-container {
  display: flex;
  flex-wrap: wrap;
  margin: 0 auto;
  width: 80%;
}

.card {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  margin: 10px;
  flex: 1 33%;
  overflow: hidden;
  position: relative;
}

.card img {
  width: 100%;
  height: auto;
  display: block;
}

.card-content {
  padding: 15px;
}

.card-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.card-description {
  font-size: 14px;
  line-height: 1.5;
  color: #666;
}

.card:hover {
  opacity: 0.8;
}
