import img_1 from "../images/Image1.png";

export default function Logo({ width = "83px", height = "135px" }) {
    return <img src={img_1} style={{ width: { width }, height: { height } }} />;
}
